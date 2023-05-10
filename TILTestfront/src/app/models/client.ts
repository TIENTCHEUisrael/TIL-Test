export class Client {
    public id:string
    public nom:string
    public ville:string
    public telephone:string
    public numero:string
    public createdAt:string
    constructor(){
        this.createdAt=Date.now().toString()
    }
}
