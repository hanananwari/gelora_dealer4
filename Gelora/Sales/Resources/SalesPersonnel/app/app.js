var geloraSalesPersonnel = angular
	.module('Gelora.SalesPersonnel', [
		'ui.router', 'angular-jwt',
		'Solumax.Loading', 'Solumax.ErrorInterceptor', 'Solumax.JwtManager',
		'Solumax.TenantDatabaseConnection', 'Solumax.PageTitle', 'Solumax.Calculator',
		'Solumax.Entity', 'Solumax.Pagination',
		'Solumax.Setting', 'Solumax.FileManager',
		'Gelora.BaseShared', 'Gelora.SalesShared', 'Gelora.HumanResourceShared',
		'Gelora.Vehicle.Shared'
	])
	.factory('AppFactory', function() {

		var appFactory = {};

		appFactory.moduleId = '30000';

		return appFactory;
	})