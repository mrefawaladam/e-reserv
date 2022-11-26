const { defineConfig } = require('cypress')

module.exports = defineConfig({
  viewportHeight: 768,
  viewportWidth: 1024,
  env: {
    DB_CONNECTION: 'postgres',
    DB_HOST: '127.0.0.1',
    DB_PORT: 5432,
    DB_USERNAME: 'devpostgre',
    DB_PASSWORD: 'putraprima',
    DB_SCHEMA: 'baru',
  },
  e2e: {
    // We've imported your old cypress plugins here.
    // You may want to clean this up later by importing these.
    setupNodeEvents(on, config) {
      return require('./cypress/plugins/index.js')(on, config)
    },
    baseUrl: 'http://starterproject.test/',
  },
})
