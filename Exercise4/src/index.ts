
class KhmerDateTime {
    date: Date;
    constructor(date: Date) {
        this.date = date;
    }

    getKhDate(): string {
        return this.date.toUTCString();
    }
}

export{
    KhmerDateTime
}