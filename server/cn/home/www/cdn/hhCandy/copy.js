function copy(){
    const input = document.createElement('input');
    document.body.appendChild(input);
    input.setAttribute('value', "i@yimian.xyz");
    input.select();
    document.execCommand("copy");
    document.body.removeChild(input);
    alert("Copied to clipboard.");
}
