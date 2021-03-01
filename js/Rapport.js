class Rapport {
    constructor() {
        if (document.title != "NormandyRP Tools | Rapport") {
            return;
        }

        this.currentType
        
        document.querySelector(".rapport-all").addEventListener("click", () => {
            this.setCurrentType("all");
        })

        document.querySelector(".rapport-us").addEventListener("click", () => {
            this.setCurrentType("us");
        })
    }

    get CurentType() {
        return this.currentType;
    }

    /**
     * Changement du type de rapport
     * @param {string} type Type de rapport
     */
    setCurrentType(type) {
        if ( type == "all" || type == "us" ) {
            this.currentType = type;
        }
    }
}