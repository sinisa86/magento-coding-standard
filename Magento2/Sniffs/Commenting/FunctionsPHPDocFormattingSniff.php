<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento2\Sniffs\Commenting;

use Magento2\Helpers\Commenting\PHPDocFormattingValidator;
use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Files\File;

/**
 * Detects PHPDoc formatting for functions.
 */
class FunctionsPHPDocFormattingSniff implements Sniff
{
    /**
     * @var PHPDocFormattingValidator
     */
    private $PHPDocFormattingValidator;

    /**
     * Helper initialisation
     */
    public function __construct()
    {
        $this->PHPDocFormattingValidator = new PHPDocFormattingValidator();
    }

    /**
     * @inheritDoc
     */
    public function register()
    {
        return [
            T_FUNCTION
        ];
    }

    /**
     * @inheritDoc
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        return;
    }
}
