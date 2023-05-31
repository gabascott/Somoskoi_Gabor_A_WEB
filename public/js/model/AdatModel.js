class AdatModel{
    #tomb = [];
    
    constructor(token){
        this.token = token;
    }

    adatBe(vegpont, myCallBack) {
        fetch(vegpont, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            }
        })
            .then((response) => response.json())
            .then((data) => {
                this.#tomb = data;
                myCallBack(this.#tomb);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }

    adatUj(vegpont, adat) {
        console.log(adat);
        console.log(JSON.stringify(adat));
        fetch(vegpont,
            {
                method: "POST",
                headers:
                {
                    "content-type": "application/json",
                    "X-CSRF-TOKEN": this.token,
                },
                body: JSON.stringify(adat),
            })
            .then((response) => response.json())
            .then((data) => {
                console.log("Sikeres adatfelvitel" + data);
            })
            .catch((error) => {
                console.error("Error", error);
            });
    }

    adatModosit(vegpont, adat) {
        console.log(adat);
        console.log("módosít", vegpont);
        vegpont += "/" + adat.id;
        fetch(vegpont,
            {
                method: "PUT",
                headers:
                {
                    "content-type": "application/json",
                    "X-CSRF-TOKEN": this.token,
                },
                body: JSON.stringify(adat),
            })
            .then((response) => response.json())
            .then((data) => {
                console.log("Sikeres módosítás" + data.updatedAt);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }

    adatTorol(vegpont, adat) {
        console.log("töröltem: ");
        console.log(adat);
        vegpont += adat;
        console.log(vegpont);
        fetch(vegpont,
            {
                method: "DELETE",
                headers:
                {
                    "X-CSRF-TOKEN": this.token,
                },
            })
            .then((response) => response.json())
            .then(() => {
                console.log("Sikeres törlés");
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
}

export default AdatModel;