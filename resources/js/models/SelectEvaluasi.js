import axios from 'axios';

export default class SelectEvaluasi {
    constructor(query){
        this.query = query;
    }

    async getResults(){
        try {
            const res = await axios(`http://127.0.0.1:8000/api/evaluasi/${this.query}`);

            this.result = res.data;

            console.log(this.result);
        } catch (error) {
            console.log(error);
        }
    }
};