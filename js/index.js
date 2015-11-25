/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
var _colorElement;
var _valueLabelElement;
var _labelColorVaso;
var _labelValueVaso;
var _articulo;
var app = {
    // Application Constructor
    initialize: function() {
        this.bindEvents();
        loadCatalogo();
        setTimeout(function(){
            goTo('#home-page');
        },1000);
        $("img").mousedown(function(){
            return false;
        });

        $('body').on("click", "#contenido-catalogo div", function(){
            _valueLabelElement = $(this).html();
            if($(this).attr('data-rel')==8){
                goTo('#valores-page');
            }else{
                loadComponentes($(this).attr('data-rel'));
            }
        });

        $('body').on("click", "#contenido-componentes div", function(){
            _articulo = $(this).find('p').html();
            $('.titulo_componente_individual p').html(_articulo);
            loadComponenteIndividual($(this).attr('data-rel'));
        });

        $('body').on("click", ".home-ico", function(){
            goTo('#home-page');
        });

        $('body').on("click", ".back-ico", function(){
            goTo('#componentes-page');
        });
    },
    // Bind Event Listeners
    //
    // Bind any events that are required on startup. Common events are:
    // 'load', 'deviceready', 'offline', and 'online'.
    bindEvents: function() {
        document.addEventListener('deviceready', this.onDeviceReady, false);
    },
    // deviceready Event Handler
    //
    // The scope of 'this' is the event. In order to call the 'receivedEvent'
    // function, we must explicitly call 'app.receivedEvent(...);'
    onDeviceReady: function() {
        app.receivedEvent('deviceready');
    },
    // Update DOM on a Received Event
    receivedEvent: function(id) {
        
    }
};

function goTo(_pageid) {
    $('.page-container').removeClass('display-front');
    $(_pageid).addClass('display-front');
}

function loadCatalogo(){
    $.ajax({
        url: 'https://maruridigitaldev.com/chocolisto/services/getCatalogo.php',
        type: "POST",
        cache: false,
        dataType: "json",
        //data: "id_area="+id_area,
        success: function(response) {
            if (response != null && response != '' && response != '[]') {
                $.each(response, function(key, value) {
                    $('#contenido-catalogo').append('<div class="shadow-inside elemento_catalogo_'+value.id+'" data-rel="'+value.id+'" style="background-color:'+value.color+'"><p style="color:'+value.font_color+'">'+value.nombre+'</p></div>');
                    if(value.id!=8){ 
                        $('#contenido-valores').append('<div class="shadow-inside elemento_catalogo_'+value.id+'" data-rel="'+value.id+'" style="background-color:'+value.color+'"><p style="color:'+value.font_color+'">'+value.nombre+'<span style="color:'+value.font_color_porcion+'"><br />'+value.porcion+'</span></p></div>');
                    }else{
                        $('#titulo_valor').append('<div class="shadow-inside elemento_catalogo_'+value.id+'" data-rel="'+value.id+'" style="background-color:'+value.color+'"><p style="color:'+value.font_color+'">'+value.nombre+'</p></div>');
                    }
                    generateGradient('.elemento_catalogo_'+value.id,value.color);
                });
            }
        },
        error: function(error) {
            $('#contenido-catalogo').append('<p>'+error+'</p>');
        }
    });
}

function loadComponentes(id){
    $('#contenido-componentes div').remove();
    $('.titulo_componente').empty();
    $.ajax({
        url: 'http://maruridigitaldev.com/chocolisto/services/getComponentes.php',
        type: "POST",
        cache: false,
        dataType: "json",
        data: "id="+id+'&tipo=1',
        success: function(response) {
            if (response != null && response != '' && response != '[]') {
                $.each(response, function(key, value) {
                    if(value.id!=999){
                        _colorElement = value.color;
                        _labelColorVaso = value.color_label;
                        _labelValueVaso = value.color_value;
                    }
                    if(value.id!=999){
                        $('#contenido-componentes').append('<div id="comp_ind_'+value.id+'" data-rel="'+value.id+'"><p>'+value.nombre+'</p></div>');                        
                    }else{
                        $('#contenido-componentes').append('<div id="comp_ind_'+value.id+'" data-rel="'+value.id+'"><img class="mini-logo-vaso" src="img/logo_vaso.png" /></div>');                        
                    }
                    setBackgroundImage('#comp_ind_'+value.id,value.image);
                });
                generateGradient('.titulo_componente',_colorElement);
                $('.titulo_componente').html(_valueLabelElement);
                goTo('#componentes-page');
            }
        },
        error: function(error) {

        }
    });
}

function loadComponenteIndividual(id){
    var flag_destino = 0;
    $('#contenido-componente-individual p').remove();
    $.ajax({
        url: 'http://maruridigitaldev.com/chocolisto/services/getComponentes.php',
        type: "POST",
        cache: false,
        dataType: "json",
        data: "id="+id+'&tipo=2',
        success: function(response) {
            if (response != null && response != '' && response != '[]') {
                $.each(response, function(key, value) {
                    if(value.id!=999){
                        $('#contenido-componente-individual').append('<p style="color:'+value.color_label+'">1 porción = <span style="color:'+value.color_value+'">'+value.porcion+'</span></p><p style="color:'+value.color_label+'">1 taza = <span style="color:'+value.color_value+'">'+value.gramos+'</span></p>');
                        $('#img-contenido-individual').attr("src",value.image);
                        $('#contenido-componente-individual').css("background-color",value.color);
                    }else{
                        flag_destino = 1;
                        $('#contenido-componente-individual-chocolisto').empty();
                        $('#contenido-componente-individual-chocolisto').css("background-color",_colorElement);
                        $('#contenido-componente-individual-chocolisto').append('<p style="color:'+_labelColorVaso+'">1 porción:<br /> <span style="color:'+_labelValueVaso+'">'+value.porcion+'</span></p>');                        
                    }
                });
                if(flag_destino){
                    goTo('#componente-individual-chocolisto-page');
                }else{
                    goTo('#componente-individual-page');
                }
            }
        },
        error: function(error) {

        }
    });
}

function generateGradient(elem,color){
    var meta = $(elem);
    meta.css("background","-webkit-radial-gradient("+colorLuminance(color, 0.4)+" 20%,"+color+" 80%)");
    meta.css("background","-o-radial-gradient("+colorLuminance(color, 0.4)+" 20%,"+color+" 80%)");
    meta.css("background","-moz-radial-gradient("+colorLuminance(color, 0.4)+" 20%,"+color+" 80%)");
    meta.css("background","radial-gradient("+colorLuminance(color, 0.4)+" 20%,"+color+" 80%)");
}

function setBackgroundImage(elem,img){
    var meta = $(elem);
    meta.css("background-image","url("+img+")");
}