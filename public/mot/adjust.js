  $(function(){

    var site_url = 'http://127.0.0.1/feast/';

    $('div.panel-body').mouseover( function(){
      $(this).find('small').css({'color' : '#000'});
    });
    
    $('div.panel-body').mouseout( function() {
      $(this).find('small').css({'color' : ''});
    });

    $text = $('div.panel-body').has('.mot-title');
    
    $.each($text , function(){
      
      var str = $(this).html().replace( /\@(\S+)/ , '<a href="#">@$1</a>');

      str = str.replace( /\#(\S+)#/g , '<a href="'+site_url+'pills/object/$1">#$1#</a>');

      $(this).html( str);

    });

    $text = $('div.panel-body').has('.mot-text');

    $.each( $text , function(){
      
      var str = $(this).find('h3 > small').html();
      
      if( str === undefined)
      
        return ;
      
      str = str.replace(/\@(\S+)/ , '<a href="#">@$1</a>');
      
      str = str.replace(/\#(\S+)#/ , '<a href="'+site_url+'pills/object/$1">#$1#</a>');

      $(this).find('.mot-text > small').html( str);

    });

    $('span.label.label-info').on('mouseover' , function(){
      $(this).removeClass('label-info');
      $(this).addClass('label-success');
    });
    $('span.label.label-info').on('mouseout' , function () {
      $(this).removeClass('label-success');
      $(this).addClass('label-info');
    });

     $('span.label.label-default').on('mouseover' , function(){
      $(this).removeClass('label-default');
      $(this).addClass('label-danger');
    });
    $('span.label.label-default').on('mouseout' , function () {
      $(this).removeClass('label-danger');
      $(this).addClass('label-default');
    });   

    $('#accordion').collapse('show');
    
    $('li').on('mouseover' , function (){
      $(this).addClass('active');
    });

    $('li').on('mouseout' , function (){
      $(this).removeClass('active');
    });

    $('.panel.mot-article').on('mouseover' , function (){
      $(this).addClass('panel-hover');
    });

    $('.panel.mot-article').on('mouseout' , function (){
      $(this).removeClass('panel-hover');
    });

    $('.user_link').on('mouseover' , function(){
      
      $(this).grumble({
        text: $(this).text()+$(this).attr('data-origin'), 
        angle: 90, 
        distance: 50, 
        showAfter: 500,
        hideOnClick: true,
      });

    });

    $('.datetimepicker').datetimepicker();

  });