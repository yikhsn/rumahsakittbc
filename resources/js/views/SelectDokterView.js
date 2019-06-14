import { elements } from './base';

export const getId = () => elements.dokterSelect.options[elements.dokterSelect.selectedIndex].value;

export const clearResult = () => {
    elements.dokterSelect.innerHTML = '';
}

export const renderResult = dokters => {
    dokters.forEach( el => renderDokter(el));
}

export const renderDokter = dokter => {
    const markup = `<option value="${ dokter.id }">${ dokter.nama }</option>`;

    elements.dokterSelect.insertAdjacentHTML('beforeend', markup);
}