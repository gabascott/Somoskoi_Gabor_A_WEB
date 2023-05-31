import AdatModel from "../model/AdatModel.js";
import KategoriaView from "../view/KategoriaView.js";

class KategoriaController{
    constructor(){
        const token = $(`meta[name="csrf-token"]`).attr("conent");
        const adatmodel = new AdatModel(token);
        adatmodel.adatBe('/api/kategoriak', this.megjelenit);
    }

    megjelenit(tomb){
        let szuloElem = $(".kategoriak");
        tomb.forEach(ingatlan => {
            new KategoriaView(ingatlan, szuloElem);
        });
    }
}

export default KategoriaController;