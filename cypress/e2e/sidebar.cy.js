describe("dashboard superadmin", () => {
    it("Superadmin can access dashboard", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Dashboard').click({force: true})
        cy.get('a').contains('Dashboard').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')
    });

    it("Superadmin can logout", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')
        cy.get('li[id=dropdown]').click({force: true})
        cy.get('a[id=logout]').click({force: true})
        cy.url().should('contain','http://localhost:8000')

    });

    it("Superadmin can access User List", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Users Management').click({force: true})
        cy.get('a').contains('User List').click({force: true})
        cy.url().should('contain','http://localhost:8000/user-management/user')
    });

    it("Superadmin can access Role Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('Role List').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/role')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('Permission List').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/permission')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('Permission To Role').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/assign')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('User To Role').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/assign-user')
    });

    it("Superadmin can access Menu Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Menu Management').click({force: true})
        cy.get('a').contains('Menu Group').click({force: true})
        cy.url().should('contain','http://localhost:8000/menu-management/menu-group')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Menu Management').click({force: true})
        cy.get('a').contains('Menu Item').click({force: true})
        cy.url().should('contain','http://localhost:8000/menu-management/menu-item')
    });

    it("Superadmin can access Table Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Table Management').click({force: true})
        cy.get('a').contains('Table List').click({force: true})
        cy.url().should('contain','http://localhost:8000/table')
    });

    it("Superadmin can access Payment Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Payment Management').click({force: true})
        cy.get('a').contains('Payment List').click({force: true})
        cy.url().should('contain','http://localhost:8000/payment')
    });

    it("Superadmin can access Transaction Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Transaction Management').click({force: true})
        cy.get('a').contains('Transaction Process').click({force: true})
        cy.url().should('contain','http://localhost:8000/transaction-prcess')
    });

    it("Superadmin can access Food Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Food Management').click({force: true})
        cy.get('a').contains('Food List').click({force: true})
        cy.url().should('contain','http://localhost:8000/menu')
    });

    it("Superadmin can access History Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('History Transaction').click({force: true})
        cy.get('a').contains('History List').click({force: true})
        cy.url().should('contain','http://localhost:8000/history-user')
    });
});

describe("dashboard user", () => {
    it("User can access dashboard", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('user@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Dashboard').click({force: true})
        cy.get('a').contains('Dashboard').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')
    });

    it("User can access Users Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('user@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Users Management').click({force: true})
        cy.get('a').contains('User List').click({force: true})
        cy.url().should('contain','http://localhost:8000/user-management/user')
    });

    it("User can access History Transaction", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('user@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('History Transaction').click({force: true})
        cy.get('a').contains('History List').click({force: true})
        cy.url().should('contain','http://localhost:8000/history-user')
    });

    it("User can logout", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('user@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')
        cy.get('li[id=dropdown]').click({force: true})
        cy.get('a[id=logout]').click({force: true})
        cy.url().should('contain','http://localhost:8000')

    });
});

describe("dashboard Staff", () => {
    it("Staff can access dashboard", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('Staf@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Dashboard').click({force: true})
        cy.get('a').contains('Dashboard').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')
    });

    it("Staff can access Users Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('Staf@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Users Management').click({force: true})
        cy.get('a').contains('User List').click({force: true})
        cy.url().should('contain','http://localhost:8000/user-management/user')
    });

    it("Staff can access Transaction Management", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('Staf@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Transaction Management').click({force: true})
        cy.get('a').contains('Transaction Process').click({force: true})
        cy.url().should('contain','http://localhost:8000/transaction-prcess')
    });

    it("Staff can logout", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('Staf@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')
        cy.get('li[id=dropdown]').click({force: true})
        cy.get('a[id=logout]').click({force: true})
        cy.url().should('contain','http://localhost:8000')

    });
});

