describe("dashboard user", () => {
    it("User can access dashboard", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('user@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('Dashboard').click()
        cy.get('a').contains('Dashboard').click()
        cy.url().should('contain','http://localhost:8000/dashboard')
    });

    it("User can access Users Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('user@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('Users Management').click()
        cy.get('a').contains('User List').click()
        cy.url().should('contain','http://localhost:8000/user-management/user')
    });

    it("User can access History Transaction", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('user@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('History Transaction').click()
        cy.get('a').contains('History List').click()
        cy.url().should('contain','http://localhost:8000/history-user')
    });

    it("User can logout", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('user@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')
        cy.get('li[id=dropdown]').click()
        cy.get('a[id=logout]').click()
        cy.url().should('contain','http://localhost:8000')

    });
});
