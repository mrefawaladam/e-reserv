describe("dashboard superadmin", () => {
    it("Superadmin can access dashboard", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('Dashboard').click()
        cy.get('a').contains('Dashboard').click()
        cy.url().should('contain','http://localhost:8000/dashboard')
    });

    it("Superadmin can logout", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')
        cy.get('li[id=dropdown]').click()
        cy.get('a[id=logout]').click()
        cy.url().should('contain','http://localhost:8000')

    });

    it("Superadmin can access User List", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('Users Management').click()
        cy.get('a').contains('User List').click()
        cy.url().should('contain','http://localhost:8000/user-management/user')
    });

    it("Superadmin can access Role Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('Role Management').click()
        cy.get('a').contains('Role List').click()
        cy.url().should('contain','http://localhost:8000/role-and-permission/role')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('Role Management').click()
        cy.get('a').contains('Permission List').click()
        cy.url().should('contain','http://localhost:8000/role-and-permission/permission')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('Role Management').click()
        cy.get('a').contains('Permission To Role').click()
        cy.url().should('contain','http://localhost:8000/role-and-permission/assign')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('Role Management').click()
        cy.get('a').contains('User To Role').click()
        cy.url().should('contain','http://localhost:8000/role-and-permission/assign-user')
    });

    it("Superadmin can access Menu Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('Menu Management').click()
        cy.get('a').contains('Menu Group').click()
        cy.url().should('contain','http://localhost:8000/menu-management/menu-group')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('Menu Management').click()
        cy.get('a').contains('Menu Item').click()
        cy.url().should('contain','http://localhost:8000/menu-management/menu-item')
    });

    it("Superadmin can access Table Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('Table Management').click()
        cy.get('a').contains('Table List').click()
        cy.url().should('contain','http://localhost:8000/table')
    });

    it("Superadmin can access Payment Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('Payment Management').click()
        cy.get('a').contains('Payment List').click()
        cy.url().should('contain','http://localhost:8000/payment')
    });

    it("Superadmin can access Transaction Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('Transaction Management').click()
        cy.get('a').contains('Transaction Process').click()
        cy.url().should('contain','http://localhost:8000/transaction-prcess')
    });

    it("Superadmin can access Food Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('Food Management').click()
        cy.get('a').contains('Food List').click()
        cy.url().should('contain','http://localhost:8000/menu')
    });

    it("Superadmin can access History Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click()
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click()
        cy.get('span').contains('History Transaction').click()
        cy.get('a').contains('History List').click()
        cy.url().should('contain','http://localhost:8000/history-user')
    });
});
