let container=document.getElementById("container");
let images_containers=document.getElementsByClassName("img_container");
let images_count=images_containers.length;
let current_img_index=0;

function setup(){
    let container_width=container.clientWidth;
    for(let i=0;i<images_count;i++){
        let element=images_containers[i];
        let new_left_pos=container_width*i;
        element.style.left=new_left_pos+"px";
    }
}
function onLeftButton(){
    if(current_img_index>0){
        let container_width=container.clientWidth;
        current_img_index--;
        for(let i=0;i<images_count;i++){
            let element=images_containers[i];
            let new_left_pos=container_width*(i-current_img_index);
            element.style.left=new_left_pos+"px";
        }
    }
}
function onRightButton(){
    if(current_img_index<images_count-1){
        let container_width=container.clientWidth;
        current_img_index++;
        for(let i=0;i<images_count;i++){
            let element=images_containers[i];
            let new_left_pos=-container_width*(current_img_index-i);
            element.style.left=new_left_pos+"px";
        }
    }
}
setup();
$(document).ready(function() {
    $('.template-article img').each(function() {
        let currentImage = $(this);
        currentImage.wrap("<a class='image-link' href='" + currentImage.attr("src") + "'</a>");
    });
    $('.image-link').magnificPopup({type:'image'});
});
