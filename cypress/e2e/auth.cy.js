describe("login", () => {
    it("Superadmin can login", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')
    });

    it("User can login", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('user@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')
    });

    it("Staff can login", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('staf@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')
    });

    it("User login failed", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('staf@gmail.com')
        cy.get('input[name=password]').type('123')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/login')
    });

    it("Email is required when login", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/login')
        cy.get('div[id=invalid_email]').contains('The email field is required.')
    });

    it("Password is required when login", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('staf@gmail.com')
        cy.get('input[name=password]')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/login')
        cy.get('div[id=invalid_password]').contains('The password field is required.')
    });

    it("All fields  are required when login", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]')
        cy.get('input[name=password]')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/login')
        cy.get('div[id=invalid_email]').contains('The email field is required.')
        cy.get('div[id=invalid_password]').contains('The password field is required.')
    });
});

describe("register", () => {
    it("Guest can register", () => {
        cy.visit("http://localhost:8000/register");
        cy.get('input[name=name]').type('Berryl Radian Hamesha')
        cy.get('input[name=email]').type('radian@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('input[name=password_confirmation]').type('password')
        cy.get('button').contains('Register').click()
        cy.url().should('contain','http://localhost:8000/login')
    });

    it("Fullname is required", () => {
        cy.visit("http://localhost:8000/register");
        cy.get('input[name=name]')
        cy.get('input[name=email]').type('qatelegi@mailinator.com')
        cy.get('input[name=password]').type('password')
        cy.get('input[name=password_confirmation]').type('password')
        cy.get('button').contains('Register').click()
        cy.url().should('contain','http://localhost:8000/register')
        cy.get('div[id=invalid_name]').contains('The full name field is required.')
    });

    it("emai is required", () => {
        cy.visit("http://localhost:8000/register");
        cy.get('input[name=name]').type('Steel')
        cy.get('input[name=email]')
        cy.get('input[name=password]').type('password')
        cy.get('input[name=password_confirmation]').type('password')
        cy.get('button').contains('Register').click()
        cy.url().should('contain','http://localhost:8000/register')
        cy.get('div[id=invalid_email_register]').contains('The email field is required.')
    });

    it("password is required", () => {
        cy.visit("http://localhost:8000/register");
        cy.get('input[name=name]').type('Steel')
        cy.get('input[name=email]').type('rube@mailinator.com')
        cy.get('input[name=password]')
        cy.get('input[name=password_confirmation]').type('password')
        cy.get('button').contains('Register').click()
        cy.url().should('contain','http://localhost:8000/register')
        cy.get('div[id=invalid_password_register]').contains('The password field is required.')
    });

    it("password confirmation is required", () => {
        cy.visit("http://localhost:8000/register");
        cy.get('input[name=name]').type('Dolan')
        cy.get('input[name=email]').type('kipy@mailinator.com')
        cy.get('input[name=password]').type('password')
        cy.get('input[name=password_confirmation]')
        cy.get('button').contains('Register').click()
        cy.url().should('contain','http://localhost:8000/register')
        cy.get('div[id=invalid_password_confirmation]').contains('The password confirmation field is required.')
    });

    it("password confirmation must same", () => {
        cy.visit("http://localhost:8000/register");
        cy.get('input[name=name]').type('Brett')
        cy.get('input[name=email]').type('lobipabeh@mailinator.com')
        cy.get('input[name=password]').type('password')
        cy.get('input[name=password_confirmation]').type('123')
        cy.get('button').contains('Register').click()
        cy.url().should('contain','http://localhost:8000/register')
        cy.get('div[id=invalid_password_confirmation]').contains('The password confirmation must same as password')
    });

    it("All field is required", () => {
        cy.visit("http://localhost:8000/register");
        cy.get('input[name=name]')
        cy.get('input[name=email]')
        cy.get('input[name=password]')
        cy.get('input[name=password_confirmation]')
        cy.get('button').contains('Register').click()
        cy.url().should('contain','http://localhost:8000/register')
        cy.get('div[id=invalid_name]').contains('The full name field is required.')
        cy.get('div[id=invalid_email_register]').contains('The email field is required.')
        cy.get('div[id=invalid_password_register]').contains('The password field is required.')
        cy.get('div[id=invalid_password_confirmation]').contains('The password confirmation field is required.')
    });
});

