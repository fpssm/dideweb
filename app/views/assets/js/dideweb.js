//CODE IGNITER USER GUIDE https://www.codeigniter.com/user_guide/
//DATETIMEPICKER https://eonasdan.github.io/bootstrap-datetimepicker/
//MOMENT https://momentjs.com/docs/
//FULL CALENDAR https://fullcalendar.io/docs
//DATA TABLES https://datatables.net/manual/
//iCheck https://github.com/fronteed/iCheck/
//ADMIN LTE https://adminlte.io/
//Slim Scroll http://rocha.la/jQuery-slimScroll
//PACE https://github.hubspot.com/pace/docs/welcome/
//Bootrap Slider https://github.com/seiyria/bootstrap-slider
//Input Mask http://www.jasny.net/bootstrap/javascript/#inputmask
//Accouting http://openexchangerates.github.io/accounting.js/
//Bootstrap Toggle http://www.bootstraptoggle.com/
//Bootstrap Multiselect http://davidstutz.de/bootstrap-multiselect/index.html


$( document ).ready(function(){

    function updateClock(){
        var dthr = moment().format("dddd, D [de] MMMM [de] YYYY [-] HH:mm");

        $( ".clock" ).html(dthr);
    }

    function timedUpdate() {
        updateClock();
        setTimeout(timedUpdate, 1000);
    }

    timedUpdate();

    $( "#encomendas" ).fullCalendar({
        navLinks: true,
        eventLimit: true,
        selectable: true,
        header:{
            left:   'prev,next today',
            center: 'prevYear title nextYear',
            right:  ''
        },
        footer:{
            right:  'month,agendaWeek,agendaDay,listWeek'
        },
        buttonText:{
            listWeek:'Lista'
        },
        eventSources: [ 
        {
            events: function(start, end, timezone, callback){
                $.ajax({
                        url: 'relacao', //encomendas
                        dataType: 'json',
                        data: {
                            start: start.unix(),
                            end: end.unix()
                        },
                        success: function(msg){
                            var events = msg.events;
                            callback(events);
                        }
                    });
            },
            color: 'blue',
            textColor: 'white' 
        },
        ],
        dayClick: function(date, jsEvent, view){
            $('#btn-add-encomenda').html('<i class="fa fa-file fa-lg"></i> Nova Encomenda em: </a>' + date.format('DD/MM/YYYY'));    
            $('#btn-add-encomenda').attr("href", "add/" + date.format('DD-MM-YYYY'));
        }
    });

    $( "#tabelaDados" ).DataTable();

    $('.scrollbar-macosx').scrollbar();

    $( '[data-toggle="tooltip"]' ).tooltip(); 

    //data de nascimento do cliente
    $( "#dtp-dn" ).datetimepicker({
        format: 'DD/MM/YYYY',
        minDate: moment().subtract(90, 'years'),
        maxDate: moment().add(5, 'minutes'),
        useCurrent: false
    });

    //data de admissão de funcionário
    $( "#dtp-da" ).datetimepicker({
        format: 'DD/MM/YYYY',
        minDate: moment().subtract(1, 'years'),
        maxDate: moment().add(5, 'minutes'),
        useCurrent: false
    });

    //data de validade do vale-presente
    $( "#dtp-vale" ).datetimepicker({
        format: 'DD/MM/YYYY',
        minDate: moment(),
        maxDate: moment().add(3, 'months'),
        useCurrent: false,
    });

    //data e hora da encomenda
    $( "#dtp-encomenda" ).datetimepicker({
        format: 'DD/MM/YYYY HH:mm',
        minDate: moment(),
        sideBySide: true,
        stepping: 5,
        toolbarPlacement: 'top',
        showTodayButton: true,
        showClose: true,
        icons: {
            today: 'glyphicon glyphicon-refresh',
        }
    });

    //data e hora da despesa
    $( "#dtp-despesa" ).datetimepicker({
        format: 'DD/MM/YYYY HH:mm',
        maxDate: moment().add(5, 'minutes'),
        sideBySide: true,
        stepping: 5,
        toolbarPlacement: 'top',
        showTodayButton: true,
        showClose: true,
        icons: {
            today: 'glyphicon glyphicon-refresh',
        }
    });

    $( "input" ).iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        // increaseArea: '20%' // optional
    });

    $( "#sliderfiado" ).slider();
    $( "#sliderfiado" ).on("slide", function(slideEvt) {
        $( "#limite_fiado" ).val(accounting.formatMoney(slideEvt.value));
    });

    $( "#slidervalor" ).slider();
    $( "#slidervalor" ).on("slide", function(slideEvt) {
        $( "#valor_demonstrativo" ).val(accounting.formatMoney(slideEvt.value));
    });

    $( window ).scroll(function () {
        if ($( this ).scrollTop() > 50) {
            $(".goto_topo").addClass("fixo");
            $(".goto_topo").removeClass("hidden");
        }else{
            $(".goto_topo").removeClass("fixo");
            $(".goto_topo").addClass("hidden");
        }
    });
    
    $( ".goto_topo" ).click(function() {
        $('html, body').animate({scrollTop:0}, 'slow');
    });

    $( "#inputCodigo" ).keydown(function( event ) {
        if ( event.which == 13 ) {
            event.preventDefault();
            $( "#inputDescricao" ).val("Salgado");
            $( this ).val("");
            $( "#inputAdd" ).focus();
        }
    });

    $( "#botaoAdd" ).click(function( event ) {
        event.preventDefault();
        alertar("botão");
    });

    $( "#inputAdd" ).keydown(function( event ) {
        if ( event.which == 13 ) {
            event.preventDefault();
            alertar("input");
        }
    });
    
    $( "#formEncomendas" ).keydown(function( event ) {
        if ( event.which == 13 ) {
            event.preventDefault();
        }
    });

    function alertar(msg){
        alert("add item pelo " + msg);
    }
    
    $( ".checkEntregar" ).on('ifClicked', function(){
        $( "#divEntregar" ).slideToggle(500);
//        $( "#divEntregar" ).toggleClass("hidden");
//        $( "#divEntregar" ).addClass("show");
    });

    $( '#dias_visita' ).multiselect({
        includeSelectAllOption: true,
    });

    $( '#dias_entrega' ).multiselect({
        includeSelectAllOption: true,
    });

    $( '#genNo' ).click(function () {
        $.ajax({
            url: "gerar",
            method: "POST"
        })
        .done(function( html ) {
            $( "#codigo" ).val( html );
        });
    });

    $( '#botao_deleta' ).click(function () {
        $.ajax({
            url: 'deletar',
            method: 'post',
            data: {'id': $("#codigo").val(), 'item': $("#item").val()},
            success: function(data) {
                location.reload();
            }// ,
            // beforeSend: function(){
            //     alert('processando');
            // },
            // complete: function(){
            //     alert('completo');
            // }
        });
    });

    $( '.item_add_comanda' ).click(function () {
        var id_item = $(this).attr("data-id_item")
        alert(id_item);
    });

    $('#deletaModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Botão que disparou o modal
        var nome = button.data('item') // Extrai informação do atributo data-*
        var id = button.data('codigo') // Extrai informação do atributo data-*
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-text').html('Você tem certeza que deseja deletar "<strong>' + nome + '</strong>"?')
        modal.find('#codigo').val(id)
        modal.find('#item').val(nome)
    })

    function setTamanho(){
        var tamanho_container = $('.content-wrapper').outerHeight();
        var tamanho_nav = $('.navbar').outerHeight();
        var tamanho_pdv =  parseInt(tamanho_container) - parseInt(tamanho_nav) -60;
        $('.pdv, .pdv_comanda, .pdv_produtos').height(tamanho_pdv);
    }

    $( window ).resize(function() {
        setTamanho();
    });

    setTamanho();

    $('.marquee').marquee({
        //duration in milliseconds of the marquee
        duration: 5000,
        //gap in pixels between the tickers
        gap: 50,
        //time in milliseconds before the marquee will start animating
        delayBeforeStart: 0,
        //'left' or 'right'
        direction: 'left',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true
    });

    // $( "#continuarAdd" ).on('ifChecked', function(){
    //     $('#addProduto').html('<i class="fa fa-save fa-lg"></i> Salvar e continuar');
    //     $('#addProduto').attr('id', 'continuarAddProduto');
    // }); 

    // $( "#continuarAdd" ).on('ifUnchecked', function(){
    //     $('#continuarAddProduto').html('<i class="fa fa-save fa-lg"></i> Salvar e sair');
    //     $('#continuarAddProduto').attr('id', 'addProduto');
    // });    
    // $('#continuarAdd').change(function() { quando usar o toggle ao inves de checkbox
    //   if($(this).prop('checked') == true){
    //     $('#addProduto').html('<i class="fa fa-save fa-lg"></i> Salvar e continuar');
    //     $('#addProduto').attr('id', 'continuarAddProduto');
    // }else{
    //     $('#continuarAddProduto').html('<i class="fa fa-save fa-lg"></i> Salvar e sair');
    //     $('#continuarAddProduto').attr('id', 'addProduto');
    // })
    // }
});

