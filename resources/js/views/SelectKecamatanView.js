import { elements } from './base';

export const getId = () => elements.kecamatanSelect.options[elements.kecamatanSelect.selectedIndex].value;

export const clearResult = () => {
    elements.kecamatanSelect.innerHTML = '';
}

export const renderResult = kecamatans => {
    kecamatans.forEach( el => renderKecamatan(el));
}

export const renderKecamatan = kecamatan => {
    const markup = `<option value="${ kecamatan.id }">${ kecamatan.name }</option>`;

    elements.kecamatanSelect.insertAdjacentHTML('beforeend', markup);
}