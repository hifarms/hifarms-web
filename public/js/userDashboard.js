const refButton = document.querySelector('.ref-icon')

const copy = () => {
  let textarea  = document.createElement('textarea');
  let copyText = document.querySelector(".copy");
  let body = document.querySelector('body');
  body.append(textarea)
  textarea.value = copyText.innerHTML;
  console.log(textarea.value);
   textarea.select();
  
  document.execCommand("copy");
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied";

  body.removeChild(textarea)
}

const showTooltip = () => {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied";
}

refButton.addEventListener('click', copy);
refButton.addEventListener('mouseout', showTooltip);

