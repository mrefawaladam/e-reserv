describe("menu", () => {
    it("user can open menu", () => {
        cy.visit("http://localhost:8000/menu-all");
        cy.get('button').contains('Choose').click()
        cy.get('div[id=alert]').contains('Batagor is Added to Cart Successfully !')
    });

    it("user can add to cart", () => {
        cy.visit("http://localhost:8000/menu-all");
        cy.get('button').contains('Choose').click()
        cy.get('div[id=alert]').contains('Batagor is Added to Cart Successfully !')
    });

    it("user can open detail menu", () => {
        cy.visit("http://localhost:8000/menu-all");
        cy.get('a[id=detail]').contains('Detail').click()
        cy.url().should('contain','http://localhost:8000/detail-menu/1')
    });
});
