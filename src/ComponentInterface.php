<?php

namespace Dredge\Component;

/**
 * A component is an arbitrary piece of a larger puzzle. A container may choose to implement the League's
 * ComponentAwareInterface in order to get access to it.
 */
interface ComponentInterface
{
    /**
     * The user-friendly name for this component. This will be displayed as plain text.
     *
     * @return string The name of this component
     */
    public function getName();

    /**
     * The description will explain to the user how this component is expected to work. HTML is allowed.
     *
     * @return string This component's description
     */
    public function getDescription();

    /**
     * The types of input that this component will accept. An empty array denotes a component that accepts no input.
     * Types must either be a primitive PHP type or the FQCN if it expects an object. Types my be followed by empty
     * square brackets to denote that it accepts multiple inputs of a given type. You may also use the special type
     * <code>'*'</code> to denote that this component will accept anything (or <code>'*[]'</code> for a collection
     * of anything).
     *
     * E.g., <code>['string', 'string[]']</code>.
     *
     * @return string[] This component's input types
     */
    public function inputTypes();

    /**
     * The output that this component produces. A component that produces no output should return <code>null</code>,
     * and types must either be a primitive PHP type or the FQCN if it produces an object.
     *
     * @return string|null This component's output type
     */
    public function outputType();

    /**
     * @param mixed $input Input is guaranteed to be
     *
     * @return mixed
     */
    public function process($input);
}
