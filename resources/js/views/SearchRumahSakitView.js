import { elements } from './base';

export const getInput = () => elements.searchBoxRumahSakit.value;

export const clearInput = () => {
    elements.searchBoxRumahSakit.value = '';
}

export const clearResult = () => {
    elements.searchRumahSakitRes.innerHTML = '';
}

export const renderResult = rumahsakits => {
    rumahsakits.forEach( el => renderRumahSakit(el));
}

const renderRumahSakit = (rumahsakit) => {
    const markup = 
    `<tr>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">${ rumahsakit.id }</td>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">${ rumahsakit.nama }</td>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">
            ${ rumahsakit.alamat },
            ${ rumahsakit.kecamatan.name  },
            ${ rumahsakit.kecamatan.kabupaten.name  },
            ${ rumahsakit.kecamatan.kabupaten.provinsi.name }
        </td>
        <td style="font-family: segoe ui; font-size:13px; text-align: center;">${ rumahsakit.nama }</td>
        <td style="font-family: segoe ui; font-size:20px; text-align: center;">
            <a href="/rumahsakit/${ rumahsakit.id }" style="color:teal; font-weight: bold;"><i class="mdi mdi-information"></i></a>
            <a href="/rumahsakit/${ rumahsakit.id }/delete" style="color:tomato; font-weight: bold;"><i class="mdi mdi-delete"></i></a>
            <a href="/rumahsakit/${ rumahsakit.id }/edit" style="color:purple; font-weight: bold;"><i class="mdi mdi-tooltip-edit"></i></a>
        </td>
    </tr>`;

    elements.searchRumahSakitRes.insertAdjacentHTML('beforeend', markup);
}