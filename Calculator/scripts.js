function display(number){
  document.form.textview.value = document.form.textview.value + number;
}

function clean(){
    document.form.textview.value = " ";
  }

function equal(){

  var exp = document.form.textview.value;
  if(exp){
    document.form.textview.value = eval(exp);
  }
}