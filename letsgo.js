let flag = 0;
function controller1(){
  flag = 0;
  cardslider(flag);
}
function controller2(){
  flag = 1;
  cardslider(flag);
}
function controller3(){
  flag = 2;
  cardslider(flag);
}
cardslider(flag);
function cardslider(num){
  let slides = document.getElementsByClassName('slider');
  let sli = document.getElementsByClassName('sli')
  for(let y of slides){
    y.style.display = "none";
  }
  for(let z of sli){
    z.style.borderBottom = "1px solid grey";
  }
  slides[num].style.display = "block";
  sli[num].style.borderBottom = "3px solid black"
  console.log(slides)
}