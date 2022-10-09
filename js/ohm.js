function myreset() {
    document.getElementById('vol').value = "";
    document.getElementById('ret').value = "";
    document.getElementById('cur').value = "";
    document.getElementById('pwr').value = "";
}

function myfunction() {
    let v, i, r;
    if (!document.getElementById('ret').value) {
        v = document.getElementById('vol').value;
        i = document.getElementById('cur').value;
        document.getElementById('ret').value = v / i;
        document.getElementById('pwr').value = v * i;
    }

    if (!document.getElementById('vol').value) {
        r = document.getElementById('ret').value;
        i = document.getElementById('cur').value;
        document.getElementById('vol').value = i * r;
        document.getElementById('pwr').value = (i * 2) * r;
    }

    if (!document.getElementById('cur').value) {
        v = document.getElementById('vol').value;
        r = document.getElementById('ret').value;
        document.getElementById('cur').value = v / r;
        document.getElementById('pwr').value = (v * 2) / r;
    }

}