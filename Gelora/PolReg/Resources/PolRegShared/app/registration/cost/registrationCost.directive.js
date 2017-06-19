geloraPolRegShared
    .directive('registrationCost', function(
        SalesOrderModel) {

        return {
            templateUrl: '/gelora/pol-reg-shared/app/registration/cost/registrationCost.html',
            scope: {
                salesOrder: '=',
            },
            link: function(scope, element, attrs) {

                scope.modalId = Math.random().toString(36).substring(2, 7)

                scope.costEntry = function(cost) {
                    scope.selectedCost = cost
                    $('#cost-entry-' + scope.modalId).modal('show')
                }

                scope.costStore = function(cost) {

                    SalesOrderModel.polReg.cost.store(scope.salesOrder.id, cost)
                        .then(function(res) {
                            scope.salesOrder = res.data.data
                            $('#cost-entry-' + scope.modalId).modal('hide')
                        })
                }

                scope.generateReceiptRegistrationCost = function(cost) {

                    window.open(LinkFactory.dealer.polReg.registration.views + 'generate-receipt-registration-cost/' + scope.innerRegistration.id + '?' + $.param({ jwt: JwtValidator.encodedJwt, cost_name: cost.name }));

                }

            }
        }

    })