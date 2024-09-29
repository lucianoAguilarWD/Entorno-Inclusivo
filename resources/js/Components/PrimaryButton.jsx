export default function PrimaryButton({
  className = "",
  disabled,
  children,
  ...props
}) {
  return (
    <button
      {...props}
      className={
        `inline-flex items-center rounded-md bg-celeste text-white px-4 py-2 text-xs font-semibold uppercase tracking-widest transition duration-200 ease-in-out ring-1 ring-transparent hover:bg-celeste/80 hover:ring-azul focus:outline-none focus-visible:ring-2 focus-visible:ring-azul active:bg-celeste/70  ${
          disabled && "opacity-25"
        } ` + className
      }
      disabled={disabled}
    >
      {children}
    </button>
  );
}
