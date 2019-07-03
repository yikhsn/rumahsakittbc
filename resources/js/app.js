require('bootstrap');

import { elements } from './views/base';
import SearchPasien from './models/SearchPasien';
import * as SearchPasienView from './views/SearchPasienView';
import SearchDokter from './models/SearchDokter';
import * as SearchDokterView from './views/SearchDokterView';
import SearchRumahSakit from './models/SearchRumahSakit';
import * as SearchRumahSakitView from './views/SearchRumahSakitView';
import * as SelectProvinsiView from './views/SelectProvinsiView';
import SelectKabupaten from './models/SelectKabupaten';
import * as SelectKabupatenView from './views/SelectKabupatenView';
import SelectKecamatan from './models/SelectKecamatan';
import * as SelectKecamatanView from './views/SelectKecamatanView';
import SelectEvaluasi from './models/SelectEvaluasi';
import * as SelectEvaluasiView from './views/SelectEvaluasiView';
import * as SelectJenisView from './views/SelectJenisView';
import SelectDokter from './models/SelectDokter';
import * as SelectDokterView from './views/SelectDokterView';
import * as SelectRumahsakitView from './views/SelectRumahsakitView';

const state = {};

console.log('File App.js is loaded');

console.log(document.getElementById('provinsi_id'));

// PASIEN CONTROLLER
const controlSearchPasien = async () => {

    const query = SearchPasienView.getInput();

    if (query) {

        state.search = new SearchPasien(query);

        SearchPasienView.clearResult();

        try {
            await state.search.getResults();

            SearchPasienView.renderResult(state.search.result);
        } catch (error) {
            console.log(`error while trying get data: ${error}`);      
        }
    }
}

// DOKTER CONTROLLER
const controlSearchDokter = async () => {

    const query = SearchDokterView.getInput();

    if (query) {

        state.search = new SearchDokter(query);

        SearchDokterView.clearResult();

        try {
            await state.search.getResults();

            SearchDokterView.renderResult(state.search.result);
        } catch (error) {
            console.log(`error while trying get data: ${error}`);      
        }
    }
}


// RUMAH SAKIt CONTROLLER
const controlSearchRumahSakit = async () => {

    const query = SearchRumahSakitView.getInput();

    if (query) {

        state.search = new SearchRumahSakit(query);

        SearchRumahSakitView.clearResult();

        try {
            await state.search.getResults();

            SearchRumahSakitView.renderResult(state.search.result);
        } catch (error) {
            console.log(`error while trying get data: ${error}`);      
        }
    }
}

const controlProvinsiSelect = async () => {
    const provinsiId = SelectProvinsiView.getId();

    if (provinsiId) {
        state.kabupaten = new SelectKabupaten(provinsiId);
        
        SelectKabupatenView.clearResult();

        SelectKecamatanView.clearResult();

        try {
            await state.kabupaten.getResults();

            SelectKabupatenView.renderResult(state.kabupaten.result);
        } catch (error) {
            console.log(`error whilte trying to get data: ${error}`);
        }
    }
}

const controlKabupatenSelect = async () => {
    const kabupatenId = SelectKabupatenView.getId();

    if (kabupatenId) {
        state.kecamatan = new SelectKecamatan(kabupatenId);
        
        SelectKecamatanView.clearResult();

        try {
            await state.kecamatan.getResults();

            SelectKecamatanView.renderResult(state.kecamatan.result);
        } catch (error) {
            console.log(`error whilte trying to get data: ${error}`);
        }
    }
}

const controlJenisSelect = async () => {
    const jenis_penyakit_id = SelectJenisView.getId();

    if (jenis_penyakit_id) {
        state.evaluasi = new SelectEvaluasi(jenis_penyakit_id);
        
        SelectEvaluasiView.clearResult();

        try {
            await state.evaluasi.getResults();

            SelectEvaluasiView.renderResult(state.evaluasi.result);
        } catch (error) {
            console.log(`error whilte trying to get data: ${error}`);
        }
    }
}

const controlRumahsakitSelect = async () => {
    const rumahsakit_id = SelectRumahsakitView.getId();

    if (rumahsakit_id) {
        state.evaluasi = new SelectDokter(rumahsakit_id);
        
        SelectDokterView.clearResult();

        try {
            await state.evaluasi.getResults();

            SelectDokterView.renderResult(state.evaluasi.result);
        } catch (error) {
            console.log(`error whilte trying to get data: ${error}`);
        }
    }
}

if(elements.searchBoxDokter){
    elements.searchBoxDokter.addEventListener('keyup', () => {
        console.log('search dokter is typed');
    
        controlSearchDokter();
    });
}

if(elements.searchBoxPasien){
    elements.searchBoxPasien.addEventListener('keyup', () => {
        console.log('search pasien is typed');
        
        controlSearchPasien();
    });
}

if(elements.searchBoxRumahSakit){
    elements.searchBoxRumahSakit.addEventListener('keyup', () => {
        console.log('search rumah sakit is typed');
        
        controlSearchRumahSakit();
    });
}

if(elements.provinsiSelect){
    elements.provinsiSelect.addEventListener('change', () => {
        console.log('provinsi is selected');
    
        controlProvinsiSelect();
    });
}

if(elements.kabupatenSelect){
    elements.kabupatenSelect.addEventListener('change', () => {
        console.log('kabupaten is selected');
        
        controlKabupatenSelect();
    });
}

if(elements.jenisSelect){
    elements.jenisSelect.addEventListener('change', () => {
        console.log('jenis penyakits is selected');
        
        controlJenisSelect();
    });
}

if(elements.rumahsakitSelect){
    elements.rumahsakitSelect.addEventListener('change', () => {
        console.log('rumah sakit is selected');
        
        controlRumahsakitSelect();
    });
}