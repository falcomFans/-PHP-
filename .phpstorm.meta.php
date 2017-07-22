<?php
	namespace PHPSTORM_META {
	/** @noinspection PhpUnusedLocalVariableInspection */
	/** @noinspection PhpIllegalArrayKeyTypeInspection */
	$STATIC_METHOD_TYPES = [

		\D('') => [
			'Adv' instanceof Think\Model\AdvModel,
			'Mongo' instanceof Think\Model\MongoModel,
			'View' instanceof Think\Model\ViewModel,
			'Cate' instanceof Home\Model\CateModel,
			'Relation' instanceof Think\Model\RelationModel,
			'User' instanceof Home\Model\UserModel,
			'Merge' instanceof Think\Model\MergeModel,
		],
	];
}