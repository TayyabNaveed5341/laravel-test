require('./bootstrap');

window.global ??= {}
window.global.uploadDynamicExcelFile = (e)=>{
    let formData = new FormData();
    formData.append('excel_file', e.currentTarget.excel_file.files[0])
    axios.post('/dynamic-spreadsheets', formData, {headers: {'Content-Type': 'multipart/form-data'}}).then(r=>{
        console.log('7', r.data);
        document.getElementsByClassName('upload-status')[0].innerText=r.data.message
    })
}