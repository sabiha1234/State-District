// let $ = $uery.noConflict();

$(document).ready(function () {
    $(".filter-btn").click(function () {
        $(".filter-wrap").slideToggle();
    });
});

function encryptyData(data) {
    const key = '4WS8851W824R456Y';
    let k = CryptoJS.enc.Utf8.parse(key);
    encryptedAES = CryptoJS.AES.encrypt(data, k, { mode: CryptoJS.mode.ECB });
    return encryptedAES.toString();
}


function encryptyUrlData(data) {
    const key = '4WS8851W824R456Y';
    let k = CryptoJS.enc.Utf8.parse(key);
    encryptedAES = CryptoJS.AES.encrypt(data, k, { mode: CryptoJS.mode.ECB });
    return encryptedAES.toString().replaceAll('+','xMl3Jk').replaceAll('/','Por21Ld').replaceAll('=','Ml32');
    // return encryptedAES.toString();
}