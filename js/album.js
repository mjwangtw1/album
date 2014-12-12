$(function (){
  
  //Bind the event when clicked on a thumb
  $('.thumb>img').on('click mouseover',function(e){
    e.preventDefault();
    showImg(this);
       
  })
  
  //toss in Object
  function showImg(thumbname){

    var src_small = thumbname.src;
    var img_alt = thumbname.alt;
  
    //console.log(thumbname.alt);
    
    //console.log(thumbname);
    var src_mid = thumbname.src.replace('s.jpg', 'c.jpg');

    
    //show the Mid photo
    $('.show').attr('src',src_mid);
    $('.desc').html(img_alt);
    
    
    
  }
  
  
  
});