describe("cart", () => {
    it("User can open cart", () => {
        cy.visit("http://localhost:8000/menu-all");
        cy.get('button').contains('Choose').click()
        cy.get('div[id=alert]').contains('Batagor is Added to Cart Successfully !')
        cy.visit("http://localhost:8000/cart");
        cy.get('button').contains('Update').click()
        cy.get('div[id=alert_cart]').contains('Item Cart is Updated Successfully !')
    });

    it("User can delete item on cart", () => {
        cy.visit("http://localhost:8000/menu-all");
        cy.get('button').contains('Choose').click()
        cy.get('div[id=alert]').contains('Batagor is Added to Cart Successfully !')
        cy.visit("http://localhost:8000/cart");
        cy.get('button').contains('Delete').click()
        cy.get('div[id=alert_cart]').contains('Batagor Remove Successfully !')
    });

    it("User can remove all item on cart", () => {
        cy.visit("http://localhost:8000/menu-all");
        cy.get('button').contains('Choose').click()
        cy.get('div[id=alert]').contains('Batagor is Added to Cart Successfully !')
        cy.visit("http://localhost:8000/cart");
        cy.get('button').contains('Remove All Cart').click()
        cy.get('div[id=alert_cart]').contains('All Item Remove Successfully!')
    });

    it("User can checkout", () => {
        cy.visit("http://localhost:8000/menu-all");
        cy.get('button').contains('Choose').click()
        cy.get('div[id=alert]').contains('Batagor is Added to Cart Successfully !')
        cy.visit("http://localhost:8000/cart");
        cy.get('button').contains('Checkout').click()
        cy.visit("http://localhost:8000/checkout");
    });
});
