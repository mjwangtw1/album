"use strict";

  //toss in Object
  function showImg(thumbname){

    var src_small = thumbname.src;
    var img_alt = thumbname.alt;
  
    //console.log(thumbname.alt);
    
    //console.log(thumbname);
    var src_mid = thumbname.src.replace('s.jpg', 'c.jpg');
    
    //show the Mid photo
    $('.show').attr('src' , src_mid);
    $('.desc').html(img_alt);
    
  }


//DOM Ready
$(function (){
  


  //Bind the event when clicked on a thumb
  $('.image_thumbs>img').on('click mouseover',function(e){
    e.preventDefault();
    showImg(this);
       
  })
  
  //Try sweet alert
  $('#manage').on('click', function(){
    swal(
      { 
        type: "info",
        title: "Function not done!",
        text: "SweetAlert \nOh isn't it sweet? \n (Close in 2s)",   
        timer: 2000 });
  })


  
});
