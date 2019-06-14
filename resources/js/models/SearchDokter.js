import axios from 'axios';

export default class SearchDokter {

    constructor(query){
        this.query = query;
    }

    async getResults(){
        try {
            const res = await axios(`http://127.0.0.1:8000/api/dokter/search/${this.query}`);

            this.result = res.data;
        } catch (error) {
            console.log(error);
        }
    }
};