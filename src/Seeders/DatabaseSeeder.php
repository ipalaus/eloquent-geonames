<?php namespace Ipalaus\Geonames\Seeders;

use Ipalaus\Geonames\Importer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	/**
	 * The importer instance.
	 *
	 * @var \Ipalaus\Geonames\Importer
	 */
	protected $importer;

	/**
	 * Create a new Seeder instance.
	 *
	 * @param  \Ipalaus\Geonames\Importer  $importer
	 * @return void
	 */
	public function __construct(Importer $importer)
	{
		$this->importer = $importer;
	}

        /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		
	}
}