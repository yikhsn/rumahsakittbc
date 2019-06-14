import { elements } from './base';

export const getInput = () => elements.searchBoxDokter.value;

export const clearInput = () => {
    elements.searchBoxDokter.value = '';
}

export const clearResult = () => {
    elements.searchDokterRes.innerHTML = '';
}

export const renderResult = dokters => {
    dokters.forEach( el => renderDokter(el));
}

const renderDokter = (dokter) => {    
    const markup = 
    `<tr>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">${ dokter.id }</td>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">${ dokter.nama }</td>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">${ dokter.rumahsakit.nama }</td>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">${ dokter.pasiens.length }</td>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">
            <a href="/dokter/${ dokter.id }" style="color:teal; font-weight: bold;">Info</a>
            <a href="/dokter/${ dokter.id }/delete" style="color:tomato; font-weight: bold;"> | Hapus</a>
            <a href="/dokter/${ dokter.id }/edit" style="color:purple; font-weight: bold;"> | Edit</i></a>
        </td>
    </tr>`;

    elements.searchDokterRes.insertAdjacentHTML('beforeend', markup);
}