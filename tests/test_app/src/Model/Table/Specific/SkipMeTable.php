<?php
namespace TestApp\Model\Table;

use Cake\ORM\Table;

/**
 * @inheritDoc
 */
class SkipMeTable extends Table {

	/**
	 * @param array $config
	 * @return void
	 */
	public function initialize(array $config): void {
		parent::initialize($config);

		$this->belongsTo('Cars');
	}

}
