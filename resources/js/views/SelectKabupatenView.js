import { elements } from './base';

export const getId = () => elements.kabupatenSelect.options[elements.kabupatenSelect.selectedIndex].value;

export const clearResult = () => {
    elements.kabupatenSelect.innerHTML = '';
}

export const renderResult = kabupatens => {
    kabupatens.forEach( el => renderKabupaten(el));
}

export const renderKabupaten = kabupaten => {
    const markup = `<option value="${ kabupaten.id }">${ kabupaten.name }</option>`;

    elements.kabupatenSelect.insertAdjacentHTML('beforeend', markup);
}