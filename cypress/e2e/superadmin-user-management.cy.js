describe("User List", () => {
    it("Superadmin can access user management", () => {
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

    it("Superadmin can add new user", () => {
        cy.visit("http://localhost:8000/login");


        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Users Management').click({force: true})
        cy.get('a').contains('User List').click({force: true})
        cy.url().should('contain','http://localhost:8000/user-management/user')

        cy.get('a').contains('Create New User').click({force: true})
        cy.get('input[name=name]').type('Mia Keller')
        cy.get('input[name=email]').type('rokeri@mailinator.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Submit').click({force: true})
        cy.get('p').contains('Data Berhasil Ditambahkan')
    });

    it("Superadmin can edit user", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Users Management').click({force: true})
        cy.get('a').contains('User List').click({force: true})
        cy.url().should('contain','http://localhost:8000/user-management/user')

        cy.get('li').contains('2').click({force: true})
        cy.url().should('contain','http://localhost:8000/user-management/user?page=2')

        cy.get('button').contains('Edit').click({force: true})
        cy.get('input[id=name]').clear()
        cy.get('input[id=name]').type('Paula Parrish')
        cy.get('input[id=email]').clear()
        cy.get('input[id=email]').type('monumu@mailinator.com')
        cy.get('button').contains('Submit').click({force: true})

        cy.get('p').contains('User Berhasil Diupdate')

    });

    it("Superadmin can delete user", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Users Management').click({force: true})
        cy.get('a').contains('User List').click({force: true})
        cy.url().should('contain','http://localhost:8000/user-management/user')

        cy.get('li').contains('2').click({force: true})
        cy.url().should('contain','http://localhost:8000/user-management/user?page=2')

        cy.get('button').contains('Delete').click({force: true})
        cy.get('p').contains('User Deleted Successfully')

    });
});
