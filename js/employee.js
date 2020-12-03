export default class Employee {
    constructor(id, Username, Name, email, ContactNumber, Password) {
        this.id = id;
        this.username = Username;
        this.name = Name;
        this.email = email;
        this.contactNumber = ContactNumber;
        this.password = Password;
    }

}
export function placeOrder(user) {

    console.log(`User's name ` + user.Name);
    // return this.Username;
}