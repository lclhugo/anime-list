const textarea = document.getElementById('bioTextarea');
const count = document.getElementById('count');
textarea.onkeyup = (charactersLeft) => {
count.innerHTML = (charactersLeft.target.value.length);
};

