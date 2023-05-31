class KategoriaView{
    #elem;
    constructor(elem, szuloElem){
        this.#elem = elem;
        szuloElem.append(`
            <option value="${elem.kategorianev}"></option>
        `);
    }
}

export default KategoriaView;