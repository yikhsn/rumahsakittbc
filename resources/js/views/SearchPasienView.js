import { elements } from './base';

export const getInput = () => elements.searchBoxPasien.value;

export const clearInput = () => {
    elements.searchBoxPasien.value = '';
}

export const clearResult = () => {
    elements.searchPasienRes.innerHTML = '';
}

export const renderResult = pasiens => {
    pasiens.forEach( el => renderPasien(el));
}

const renderPasien = (pasien) => {
    const markup = 
    `<tr>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">${ pasien.id }</td>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">${ pasien.nik }</td>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">${ pasien.nama }</td>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">${ pasien.created_at }</td>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">${ pasien.pendamping.nama }</td>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">${ pasien.type.type }</td>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">${ pasien.jenis_penyakit.nama }</td>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">${ pasien.rumahsakit.nama }</td>
        <td style="font-family: segoe ui; font-size:13px; text-align: center; background-color: #tomato; color:black;">${ pasien.evaluasi.nama }</td>
        <td style="font-family: segoe ui; font-size:20px; text-align: center;">
            <a href="/pasien/${ pasien.id }" style="color:teal; font-weight: bold;"><i class="mdi mdi-information"></i></a>
            <a href="/pasien/${ pasien.id }/delete" style="color:tomato; font-weight: bold;"><i class="mdi mdi-delete"></i></a>
            <a href="/pasien/${ pasien.id }/edit" style="color:purple; font-weight: bold;"><i class="mdi mdi-tooltip-edit"></i></a>
        </td>
    </tr>`;

    elements.searchPasienRes.insertAdjacentHTML('beforeend', markup);
}