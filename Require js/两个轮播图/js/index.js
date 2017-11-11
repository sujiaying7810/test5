requirejs.config({
     paths:{
          jquery:"jquery-1.12.4"
     }
});
require(["jquery","carousel"],function($,Carousel){
   var setting = {
        selector:"#container",
        imgs:"img/1.jpg,img/2.jpg,img/3.jpg,img/4.jpg,img/5.jpg,img/6.jpg,img/7.jpg",
        speed:500,
        buttonStyle:"square",
        lrPosition:"bottom"

   };



});