export class Contrat {

    public id:string
    public duree:string
    public numero:string
    public date:string
    public type:string
    public createdAt:string
    constructor(){
        this.createdAt=Date.now().toString()
    }
}
