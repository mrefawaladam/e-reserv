describe("Role List", () => {
    it("Superadmin can access role list", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('Role List').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/role')
    });

    it("Superadmin can create new role", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('Role List').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/role')

        cy.get('a').contains('Create New Role').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/role/create')
        cy.get('input[id=name]').type('intern')
        cy.get('input[id=guard_name]').clear()
        cy.get('input[id=guard_name]').type('web')
        cy.get('button').contains('Submit').click({force: true})
        cy.get('p').contains('Role Created Successfully')
    });

    it("Superadmin can edit role", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('Role List').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/role')

        cy.get('button').contains('Edit').click({force: true})
        cy.get('input[id=name]').clear()
        cy.get('input[id=name]').type('user')
        cy.get('input[id=guard_name]').clear()
        cy.get('input[id=guard_name]').type('web')
        cy.get('button').contains('Submit').click({force: true})

        cy.get('p').contains('Role Updated Successfully')

    });

    it("Superadmin can delete role", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('Role List').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/role')

        cy.get('button').contains('Delete').click({force: true})
        cy.get('p').contains('Role Deleted Successfully')
    });
});

describe("Permission List", () => {
    it("Superadmin can access permission list", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('Permission List').click({force: true})
        cy.url().should('contain','localhost:8000/role-and-permission/permission')
    });

    it("Superadmin can create new permission", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('Permission List').click({force: true})
        cy.url().should('contain','localhost:8000/role-and-permission/permission')

        cy.get('a').contains('Create New Permission').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/permission/create')
        cy.get('input[id=name]').type('create.update')
        cy.get('input[id=guard_name]').clear()
        cy.get('input[id=guard_name]').type('web')
        cy.get('button').contains('Submit').click({force: true})
        cy.get('p').contains('Permission Created Successfully')
    });

    it("Superadmin can edit permission", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('Permission List').click({force: true})
        cy.url().should('contain','localhost:8000/role-and-permission/permission')

        cy.get('button').contains('Edit').click({force: true})
        cy.get('input[id=name]').clear()
        cy.get('input[id=name]').type('dashboard')
        cy.get('input[id=guard_name]').clear()
        cy.get('input[id=guard_name]').type('web')
        cy.get('button').contains('Submit').click({force: true})

        cy.get('p').contains('Permission Updated Successfully')
    });

    it("Superadmin can delete permission", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('Permission List').click({force: true})
        cy.url().should('contain','localhost:8000/role-and-permission/permission')

        cy.get('button').contains('Delete').click({force: true})
        cy.get('p').contains('Permission Deleted Successfully')
    });
});

describe("Permission To Role", () => {
    it("Superadmin can access permission to role", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('Permission To Role').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/assign')
    });

    it("Superadmin can assign permission to role", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('Permission To Role').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/assign')

        cy.get('a').contains('Assign Permission To Role').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/assign/create')
        cy.get('select[name=role]').then($role => {$role.val('user')})
        cy.get('select[id=permissions]').select(['menu.management','role.permission.management','role.import'], {force: true})
        cy.get('button').contains('Submit').click({force: true})
        cy.get('p').contains('Permission Assigned Successfully')
    });

    it("Superadmin can edit permission to role", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('Permission To Role').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/assign')

        cy.get('button').contains('Edit').click({force: true})
        cy.get('select[id=permissions]').select(['dashboard','user.management','user.index','history-user.index','menu.management'], {force: true})
        cy.get('button').contains('Submit').click({force: true})
        cy.get('p').contains('Permission Assigned Successfully')
    });
});

describe("User To Role", () => {
    it("Superadmin can access user to role", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('User To Role').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/assign-user')
    });

    it("Superadmin can assign user to role", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('User To Role').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/assign-user')

        cy.get('a').contains('Assign User To Role').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/assign-user/create')
        cy.get('select[name=user]').select('berryl',{force:true})
        cy.get('select[id=roles]').select('staf',{force:true})
        cy.get('button').contains('Submit').click({force: true})
        cy.get('p').contains('User Assigned To Role Successfully')
    });

    it("Superadmin can edit user to role", () => {
        cy.visit("http://localhost:8000/login");

        cy.get('input[name=email]').type('superadmin@gmail.com')
        cy.get('input[name=password]').type('password')
        cy.get('button').contains('Login').click({force: true})
        cy.url().should('contain','http://localhost:8000/dashboard')

        cy.get('ul[id=navbar]').click({force: true})
        cy.get('span').contains('Role Management').click({force: true})
        cy.get('a').contains('User To Role').click({force: true})
        cy.url().should('contain','http://localhost:8000/role-and-permission/assign-user')

        cy.get('button').contains('Edit').click({force: true})
        cy.get('select[id=roles]').select('super-admin',{force:true})
        cy.get('button').contains('Submit').click({force: true})
        cy.get('p').contains('User Assigned To Role Successfully')
    });
});
