<?php
if ( !class_exists('Puc_v4p13_Update', false) ):

	/**
	 * A simple container class for holding information about an available update.
	 *
	 * @author Janis Elsts
	 * @access public
	 */
	abstract class Puc_v4p13_Update extends Puc_v4p13_Metadata {
		public $slug;
		public $version;
		public $download_url;

		/**
		 * @var string Optional. SHA-256 hex hash of the update package. When present,
		 * the downloaded file is verified against this checksum before installation.
		 */
		public $sha256;

		public $translations = array();

		/**
		 * @return string[]
		 */
		protected function getFieldNames() {
			return array('slug', 'version', 'download_url', 'sha256', 'translations');
		}

		public function toWpFormat() {
			$update = new stdClass();

			$update->slug = $this->slug;
			$update->new_version = $this->version;
			$update->package = $this->download_url;

			return $update;
		}
	}

endif;
