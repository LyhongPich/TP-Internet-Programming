"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.KhmerDateTime = void 0;
class KhmerDateTime {
    date;
    constructor(date) {
        this.date = date;
    }
    getKhDate() {
        return this.date.toUTCString();
    }
}
exports.KhmerDateTime = KhmerDateTime;
