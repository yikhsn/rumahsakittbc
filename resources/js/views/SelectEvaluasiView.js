import { elements } from './base';

export const getId = () => elements.evaluasiSelect.options[elements.evaluasiSelect.selectedIndex].value;

export const clearResult = () => {
    elements.evaluasiSelect.innerHTML = '';
}

export const renderResult = evaluasis => {
    evaluasis.forEach( el => renderEvaluasi(el));
}

export const renderEvaluasi = evaluasi => {
    const markup = `<option value="${ evaluasi.id }">${ evaluasi.nama } - ${ evaluasi.jenis_penyakit.nama }</option>`;

    elements.evaluasiSelect.insertAdjacentHTML('beforeend', markup);
}