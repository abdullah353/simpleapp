angular.module('liimex', [])
.directive('customerLogin', function() {
  return {
    controller: function ( $scope, $element ) {
        $scope.csrf = jQuery("meta[name=csrf-token]").attr("content");
	$scope.avatar = "https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120";
    },
    templateUrl: '/js/templates/login.html'
  };
});
