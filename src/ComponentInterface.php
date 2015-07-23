<?php

namespace Dredge\Component;

use League\Container\Container;

/**
 * A component is an arbitrary piece of a larger puzzle.
 */
interface ComponentInterface
{
    /**
     * @param Container $container Available services that this component can use
     */
    public function setContainer(Container $container);

    /**
     * The options the end user has set on this component. This method should perform any necessary validation on the
     * settings and throw the <code>\Dredge\Component\Exception\SettingsException</code> exception in the event that
     * the settings provided are inadequate.
     *
     * @param array $settings
     *
     * @throws \Dredge\Component\Exception\SettingsException If the settings aren't properly configured
     */
    public function setSettings(array $settings);

    /**
     * The types of input that this component will accept. An empty array denotes a component that accepts no input.
     * Types must either be a primitive PHP type or the FQCN if it expects an object. Types my be followed by empty
     * square brackets to denote that it accepts multiple inputs of a given type.
     *
     * E.g., <code>['string', 'string[]']</code>.
     *
     * @return string[]
     */
    public function inputTypes();

    /**
     * The output that this component produces. A component that produces no output should return <code>null</code>,
     * and types must either be a primitive PHP type or the FQCN if it produces an object.
     *
     * @return string|null
     */
    public function outputType();

    /**
     * @param mixed $input Input is guaranteed to be
     *
     * @return mixed
     */
    public function process($input);
}
